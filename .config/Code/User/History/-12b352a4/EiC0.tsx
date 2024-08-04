"use client";

import { ReactChildren } from "@/types/type";
import { createContext, use } from "react";
import { BsArrowsAngleExpand } from "react-icons/bs";
import { IoClose } from "react-icons/io5";

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
    const { title } = useHeaderContext();
    return <h3 className="text-stone-500">{title}</h3>;
};

Header.close = () => {
    return (
        <div className="flex items-center gap-3">
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
