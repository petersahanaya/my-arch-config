"use client";

import { useEffect } from "react";

const TodoListError = ({
    error,
    reset,
}: {
    error: string;
    reset: () => void;
}) => {
    useEffect(() => {
        console.error(error);
        reset();
    }, []);
    return <main>Something went wrong!</main>;
};

export default TodoListError;
