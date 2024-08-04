"use client";

import { ReactChildren } from "@/types/type";
import { createContext } from "react";

type HeaderProps = {
    title: string;
};

const HeaderContext = createContext<null | HeaderProps>(null);

const Header = ({ title, children }: HeaderProps & ReactChildren) => {
    return (
        <HeaderContext.Provider
            value={{ title: title }}
        ></HeaderContext.Provider>
    );
};

Header.title = () => {};

Header.close = () => {};

export default Header;
