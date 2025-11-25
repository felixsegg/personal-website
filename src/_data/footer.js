module.exports = function() {
    const footerData = {
        "de": [
            { label: "Impressum", url: "/de/imprint/" },
            { label: "Kontakt", url: "/de/contact/" }
        ],
        "en": [
            { label: "Imprint", url: "/en/imprint/" },
            { label: "Contact", url: "/en/contact/" }
        ]
    };

    return function(lang = "de") {
        return footerData[lang] || footerData["de"];
    };
};
