import { ReactChildren, ReactClassName } from "@/types/type";
import { BsArrowsAngleExpand } from "react-icons/bs";
import { IoClose } from "react-icons/io5";

import cn from "@/utils/cn";

const Header = ({ children, className }: ReactChildren) => {
    return (
        <header
            className={cn(
                "flex w-full items-center justify-between",
                className
            )}
        >
            {children}
        </header>
    );
};

Header.title = ({ className, children }: ReactChildren) => {
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
