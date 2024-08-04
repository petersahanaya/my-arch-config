import { getTodo } from "@/api/client/api.client";

import List from "@ui/list";
import Header from "@ui/header";

const Todo = async () => {
    const todos = await getTodo();
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
