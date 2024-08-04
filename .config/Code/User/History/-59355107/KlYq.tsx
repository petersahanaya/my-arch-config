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
    return <div>Something went wrong!</div>;
};

export default TodoListError;
