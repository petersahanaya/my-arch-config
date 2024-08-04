import { ReactChildren } from "@/types/type";
import cn from "@/utils/cn";

const Container = ({ children, className }: ReactChildren) => {
    return (
        <main
            className={cn(
                "flex h-screen w-screen items-center justify-center bg-gray-400"
            )}
        >
            <main className={cn("h-auto w-96", className)}>{children}</main>
        </main>
    );
};

export default Container;
