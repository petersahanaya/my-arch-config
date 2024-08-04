import { ReactChildren } from "@/types/type";
import cn from "@/utils/cn";

const Container = ({ children, className }: ReactChildren) => {
    return (
        <main className={cn("h-screen w-screen bg-gray-400", className)}>
            {children}
        </main>
    );
};

export default Container;
