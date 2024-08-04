import { ReactChildren } from "@/types/type";

const Container = ({ children, className }: ReactChildren) => {
    return <main className="h-screen w-screen bg-gray-400">{children}</main>;
};

export default Container;
