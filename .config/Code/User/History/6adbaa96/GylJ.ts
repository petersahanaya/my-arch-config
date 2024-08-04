import { todoSchema, TodoType } from "@/utils/schemas/init.schema";

type TodoApiResponse = {
    todos: TodoType[];
};

export const getTodo = async () => {
    const resp = await fetch("http://localhost:3000/api/todo", {
        method: "GET",
    });

    if (!resp.ok) throw new Error("Not Okay!");

    const { todos: rawTodos } = (await resp.json()) as TodoApiResponse;
    console.log({ rawTodos });

    const { success, data: todos } = todoSchema.array().safeParse(rawTodos);

    if (!success) throw new Error("todo doesn't same as schema.");

    return { todos };
};
