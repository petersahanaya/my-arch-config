import { ReactClassName } from "@/types/type";
import cn from "@/utils/cn";

const Line = ({ className }: ReactClassName) => {
    return <hr className={cn("my-4", className)} />;
};

export default Line;
