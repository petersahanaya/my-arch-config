import { ReactChildren } from "@/types/type";
import cn from "@/utils/cn";

const Container = ({ children, className }: ReactChildren) => {
    return (
        <main
            className={cn(
                "flex h-screen w-screen items-center justify-center bg-gray-400",
                className
            )}
        >
            {children}
        </main>
    );
};

export default Container;
