"use client";

import Line from "@ui/line";
import Container from "@ui/container";
import Header from "@ui/header";
import List from "@/ui/list";

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
                {/* <header className="flex items-center justify-between pb-2 text-stone-500">
                    <h4 className="font-[600]">Your todo</h4>
                    <button className="hover:underline">see all</button>
                </header> */}
                <Header className="pb-3">
                    <Header.title>Your todo</Header.title>
                    <button className="hover:underline">see all</button>
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

                <Line />
            </section>
        </Container>
    );
};

export default Home;
