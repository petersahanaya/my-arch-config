"use client";
import Line from "@ui/line";
import Container from "@ui/container";
import Header from "@ui/header";
import cn from "@utils/cn";
import { todoType } from "@schemas/init.schema";

const statusColor: Record<todoType["status"], string> = {
    "in progress": "bg-yellow-300",
    completed: "bg-green-400",
    urgent: "bg-red-500",
};

const todos = [
    {
        id: crypto.randomUUID(),
        title: "Learn math",
        status: "in progress" as const,
    },
    {
        id: crypto.randomUUID(),
        title: "Coding",
        status: "urgent" as const,
    },
    {
        id: crypto.randomUUID(),
        title: "Cook",
        status: "completed" as const,
    },
];

const Home = () => {
    return (
        <Container className="h-96">
            <Header>
                <Header.title>Notion</Header.title>
                <Header.close />
            </Header>
            <Line />

            <section>
                <header className="flex items-center justify-between pb-2 text-stone-500">
                    <h4 className="font-[600]">Your todo</h4>
                    <button className="hover:underline">see all</button>
                </header>

                <ul className="flex w-full flex-col gap-3 px-4 pb-4">
                    {todos.map((todo) => (
                        <li
                            key={todo.id}
                            className="flex items-center justify-between text-[.9rem]"
                        >
                            <button className="flex items-center justify-around gap-3 font-[500] text-stone-600">
                                <input
                                    type="checkbox"
                                    name="Buy jewelery"
                                    id="1"
                                />
                                <p id="1">{todo.title}</p>
                            </button>
                            <span
                                className={cn(
                                    "w-40 rounded-full p-2 px-7 text-center font-[600] capitalize",
                                    statusColor[todo.status]
                                )}
                            >
                                {todo.status}
                            </span>
                        </li>
                    ))}
                </ul>
            </section>
        </Container>
    );
};

export default Home;
