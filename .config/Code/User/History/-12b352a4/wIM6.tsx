"use client";

import { ReactChildren, ReactClassName } from "@/types/type";
import { createContext, use } from "react";
import { BsArrowsAngleExpand } from "react-icons/bs";
import { IoClose } from "react-icons/io5";

import cn from "@/utils/cn";

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

const Header = ({ children }: ReactChildren) => {
    return (
        // <HeaderContext.Provider value={{ title: title }}>
        <header className="flex w-full items-center justify-between">
            {children}
        </header>
        // </HeaderContext.Provider>
    );
};

Header.title = ({ className, children }: ReactChildren) => {
    // const { title } = useHeaderContext();
    return <h3 className={cn("text-stone-500", className)}>{children}</h3>;
};

Header.close = ({ className }: ReactClassName) => {
    return (
        <div className={cn("flex items-center gap-3", className)}>
            <button>
                <BsArrowsAngleExpand className="text-stone-500" />
            </button>

            <button>
                <IoClose size={25} className="text-stone-600" />
            </button>
        </div>
    );
};

export default Header;
