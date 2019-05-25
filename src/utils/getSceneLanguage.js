import {DEFAULT_LANGUAGE} from "../texts";
import {getQueryObject} from "./getQueryObject";
import React from "react";

/**
 *
 * Função que recebe os props do Route, e retorna a propriedade lang
 *
 * @param props
 * @returns {string}
 */
export const getSceneLanguage = (props) => {
    const {lang = DEFAULT_LANGUAGE} = getQueryObject(props.location.search);
    return lang
};