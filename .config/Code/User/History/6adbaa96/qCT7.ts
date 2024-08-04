import { todoSchema, TodoType } from "@/utils/schemas/init.schema";

type TodoApiResponse = {
    todos: TodoType[];
};

export const getTodo = async () => {
    const resp = await fetch("http://localhost:3000/api/todo", {
        method: "GET",
    });

    if (!resp.ok) throw new Error(JSON.stringify({ message: "Not OkaY!" }));

    const { todos: rawTodos } = (await resp.json()) as TodoApiResponse;

    const todos = todoSchema.array().safeParse(rawTodos);

    if (!todos.success)
        throw new Error("Error : todo doesn't same as the schema.");

    return todos.data;
};
