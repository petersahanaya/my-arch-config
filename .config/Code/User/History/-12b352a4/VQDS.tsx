"use client";

import { useContext } from "react";

const HeaderContext = useContext<null | >(null)

const Header = () => {
    return <div>Header</div>;
};

Header.title = () => {};

Header.close = () => {};

export default Header;