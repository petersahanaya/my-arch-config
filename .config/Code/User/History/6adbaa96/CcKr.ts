import { todoSchema, TodoType } from "@/utils/schemas/init.schema";

const BASE_URL = new URL("https://localhost:3000/api");

type TodoApiResponse = {
    todos: TodoType[];
};

export const getTodo = async () => {
    const { todos: rawTodos } = (await fetch(
        BASE_URL.origin.concat("/todo")
    )) as TodoApiResponse;

    const todos = todoSchema.array().safeParse(rawTodos);

    if (!todos.success)
        throw new Error("Error : todo doesn't same as the schema.");

    return todos.data;
};
