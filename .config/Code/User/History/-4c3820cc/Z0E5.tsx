import { TodoType } from "@/schemas/init.schema";
import Header from "@/ui/header";
import List from "@/ui/list";

const todos = [
    // {
    //     id: crypto.randomUUID(),
    //     title: "Learn math",
    //     status: "in progress" as const,
    // },
    // {
    //     id: crypto.randomUUID(),
    //     title: "Coding",
    //     status: "urgent" as const,
    // },
    // {
    //     id: crypto.randomUUID(),
    //     title: "Cook",
    //     status: "completed" as const,
    // },
] satisfies TodoType[];

const Todo = () => {
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
            </Header>

            {todos.length ? (
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
            ) : (
                <p className="text-center text-lg text-stone-500">
                    There's no todo yet 😅
                </p>
            )}
        </section>
    );
};

export default Todo;
