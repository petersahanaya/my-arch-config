"use client";

import { createContext } from "react";

type HeaderProps = {
    title: string;
};

const HeaderContext = createContext<null | HeaderProps>(null);

const Header = () => {
    return <div>Header</div>;
};

Header.title = () => {};

Header.close = () => {};

export default Header;
