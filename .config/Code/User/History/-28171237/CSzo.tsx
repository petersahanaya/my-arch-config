"use client";

import Line from "@ui/line";
import Container from "@ui/container";
import Header from "@ui/header";
import List from "@/ui/list";
import Form from "@/ui/form";

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
        <Container>
            <Header>
                <Header.title>Notion</Header.title>
                <Header.close />
            </Header>

            <Line />

            <section>
                <Header className="px-2 pb-3">
                    <Header.title>Your todo</Header.title>
                    <button className="font-[600] text-stone-600 hover:underline">
                        see all
                    </button>
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

                <Form />
            </section>
        </Container>
    );
};

export default Home;