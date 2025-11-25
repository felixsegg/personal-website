const permalink = require("./src/_data/permalink");

module.exports = function(eleventyConfig) {
    eleventyConfig.addPassthroughCopy("src/assets");
    eleventyConfig.addPassthroughCopy("src/downloads");
    eleventyConfig.addPassthroughCopy("src/index.html");
    eleventyConfig.addPassthroughCopy("src/.htaccess");
    eleventyConfig.addPassthroughCopy("src/manifest.webmanifest");


    eleventyConfig.addCollection("pages", (collectionApi) => {
        const pages = collectionApi.getAll()
            .filter(p => p.inputPath.includes("/pages/") && p.inputPath.endsWith(".md"));

        const grouped = {};

        pages.forEach(page => {
            const parts = page.filePathStem.split("/");
            const lang = parts.pop();
            const base = parts.join("/");

            grouped[base] ??= {};
            grouped[base][lang] = page;
        });

        Object.values(grouped).forEach(group =>
            Object.entries(group).forEach(([lang, page]) => {
                page.data.lang = lang;
                page.data.langSwitch = Object.entries(group)
                    .map(([l, p]) => ({ lang: l, url: p.url, label: l.toUpperCase() }));
            })
        );

        return pages;
    });



    eleventyConfig.addGlobalData("eleventyComputed", {
        permalink: (data) => {
            return permalink(data);
        }
    });

    return {
        dir: {
            input: "src",
            output: "dist",
            includes: "_includes",
            layouts: "layouts"
        },
        markdownTemplateEngine: "njk",
        htmlTemplateEngine: "njk",
        dataTemplateEngine: "njk"
    };
};
