/**
 * Função que retorna um objeto contendo os elementos da searchString após a primeira hash
 *
 * @param queryString
 * @returns object of Strings
 */
export const getQueryObject = queryString => {
    return (
        !!queryString ? queryString.substring(1).split("&").reduce((prev, curr) => {
        const [key, value] = curr.split("=");
        prev[key] = value;
        return prev;
    }, {}) : {}
    ) || {};
};