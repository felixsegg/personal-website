module.exports = (data) => {
    if (!data.page || !data.page.filePathStem) return undefined;

    const stem = String(data.page.filePathStem);

    if (!stem.startsWith("/pages") && !stem.startsWith("pages")) return undefined;

    const rel = stem.replace(/^\/?pages\/?/, ""); // "home/de" oder "theses/bachelor/de"
    const parts = rel.split("/").filter(Boolean);

    const lang = parts.pop();
    if (!lang || lang.length !== 2) return undefined;

    const urlPath = parts.join("/");
    return `/${lang}/${urlPath ? urlPath + "/" : ""}`;
};
