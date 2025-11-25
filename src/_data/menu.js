module.exports = function() {
    const menuData = {
        "de": [
            { label: "Home", url: "/de/home/" },
            { label: "Geschäftliches", url: "/de/business/" },
            { label: "Persönliches", url: "/de/personal/" },
            { label: "Lebenslauf", url: "/de/cv/" },
            { label: "Abschlussarbeiten", url: "/de/theses/" },
            { label: "Spielereien", url: "/de/gadgets/" },
            { label: "Externe Links", url: "/de/links/" }
        ],
        "en": [
            { label: "Home", url: "/en/home/" },
            { label: "Business", url: "/en/business/" },
            { label: "Personal", url: "/en/personal/" },
            { label: "CV", url: "/en/cv/" },
            { label: "Theses", url: "/en/theses/" },
            { label: "Gadgets", url: "/en/gadgets/" },
            { label: "External Links", url: "/en/links/" }
        ]
    };

    return function(lang) {
        return menuData[lang] || menuData["de"];
    };
};
