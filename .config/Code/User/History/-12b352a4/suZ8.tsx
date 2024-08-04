"use client";

import { ReactChildren } from "@/types/type";
import { createContext, use } from "react";

type HeaderProps = {
    title: string;
};

const HeaderContext = createContext<null | HeaderProps>(null);

const useHeaderContext = () => {
    const ctx = use(HeaderContext);

    if (!ctx)
        throw new Error(
            "useHeaderContext must be used within header component"
        );

    return ctx;
};

const Header = ({ title, children }: HeaderProps & ReactChildren) => {
    return (
        <HeaderContext.Provider value={{ title: title }}>
            <header className="flex w-full items-center justify-between">
                {children}
            </header>
        </HeaderContext.Provider>
    );
};

Header.title = () => {
    return <h3 className="text-stone-500">P3App</h3>;
};

Header.close = () => {};

export default Header;
