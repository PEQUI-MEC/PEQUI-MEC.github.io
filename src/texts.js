export const TEXTS = {
    EXAMPLE: {
        en: "TESTING",
        pt: "TESTANDO"
    },
    ABOUT_US: {
        en: "About us",
        pt: "Sobre nós"
    },
    TEAMS: {
        en: "Teams",
        pt: "Equipes"
    },
    CONTACT: {
        en: "Contact",
        pt: "Contato"
    },
    LANGUAGE: {
        en: "Language",
        pt: "Idioma"
    }
};

/**
 * Arrow function para pegar o texto do componente pelo ID
 *
 * @param textId
 * @param language
 */

export const getLanguageText = (textId, language = DEFAULT_LANGUAGE) => {
    return TEXTS[textId][
        TEXTS[textId].hasOwnProperty(language) ? language : DEFAULT_LANGUAGE
        ];
};

export const DEFAULT_LANGUAGE = "en";