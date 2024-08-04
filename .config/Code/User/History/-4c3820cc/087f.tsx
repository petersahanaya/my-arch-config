import { getTodo } from "@/api/client/api.client";

import List from "@ui/list";
import Header from "@ui/header";
import { TodoType } from "@/utils/schemas/init.schema";

const Todo = async () => {
    const todos = [
        {
            id: crypto.randomUUID(),
            title: "Learn math",
            status: "in progress",
            category: "study",
            createdAt: new Date().toISOString(),
            updatedAt: new Date().toISOString(),
        },
        {
            id: crypto.randomUUID(),
            title: "Coding",
            status: "urgent",
            category: "coding",
            createdAt: new Date().toISOString(),
            updatedAt: new Date().toISOString(),
        },
        {
            id: crypto.randomUUID(),
            title: "Cook",
            status: "completed",
            category: "cooking",
            createdAt: new Date().toISOString(),
            updatedAt: new Date().toISOString(),
        },
    ] satisfies Array<TodoType>;
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
            </Header>

            <ul className="flex w-full flex-col gap-3 px-4 pb-4">
                {todos.map((todo) => (
                    <List
                        id={todo.id}
                        title={todo.title}
                        status={todo.status}
                        key={todo.id}
                    />
                ))}
            </ul>
        </section>
    );
};

export default Todo;
