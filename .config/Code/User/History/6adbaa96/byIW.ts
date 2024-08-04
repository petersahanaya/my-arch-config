import { todoSchema, TodoType } from "@/utils/schemas/init.schema";

const BASE_URL = new URL("http://localhost:8080/api");

type TodoApiResponse = {
    todos: TodoType[];
};

export const getTodo = async () => {
    const resp = await fetch(BASE_URL.origin.concat("/todo"));

    const { todos: rawTodos } = (await resp.json()) as TodoApiResponse;

    const todos = todoSchema.array().safeParse(rawTodos);

    if (!todos.success)
        throw new Error("Error : todo doesn't same as the schema.");

    return todos.data;
};
