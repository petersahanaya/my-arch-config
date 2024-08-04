"use client";

import Line from "@ui/line";
import Header from "@ui/header";
import List from "@/ui/list";
import Form from "@/ui/form";
import Link from "next/link";

const Home = () => {
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
                <Link
                    href="/todo"
                    className="font-[600] text-stone-600 hover:underline"
                >
                    see all
                </Link>
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
    );
};

export default Home;
