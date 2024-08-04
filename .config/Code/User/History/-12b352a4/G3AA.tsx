"use client";

import { ReactChildren } from "@/types/type";
import { createContext } from "react";

type HeaderProps = {
    title: string;
};

const HeaderContext = createContext<null | HeaderProps>(null);

const Header = ({ title, children, className} : HeaderProps & ReactChildren) => {
    return <HeaderContext.Provider value={{title : }}></HeaderContext.Provider>;
};

Header.title = () => {};

Header.close = () => {};

export default Header;
