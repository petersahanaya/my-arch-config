import { ReactClassName } from "@/types/type";
import cn from "@/utils/cn";

const Line = ({ className }: ReactClassName) => {
    return <hr className={cn("py-4", className)} />;
};

export default Line;
