"use client";
import { ReactChildren } from "@/types/type";
import { QueryClient } from "@tanstack/react-query";

const queryClient = new QueryClient();

const TanstackProvider = ({ children }: ReactChildren) => {
    return <QueryClientProvider>{children}</QueryClientProvider>;
};

export default TanstackProvider;
