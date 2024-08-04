"use client";

import { ReactChildren } from "@/types/type";
import { createContext, use } from "react";

type HeaderProps = {
    title: string;
};

const HeaderContext = createContext<null | HeaderProps>(null);

const useHeaderContext = () => {
    const ctx = use(HeaderContext);

    if (!ctx) throw new Error("useHeaderContext must be used within header");
};

const Header = ({ title, children }: HeaderProps & ReactChildren) => {
    return (
        <HeaderContext.Provider value={{ title: title }}>
            {children}
        </HeaderContext.Provider>
    );
};

Header.title = () => {};

Header.close = () => {};

export default Header;
