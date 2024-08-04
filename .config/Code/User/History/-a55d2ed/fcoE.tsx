import Header from "@ui/header";

const Form = () => {
    return (
        <main>
            <form>
                <Header className="pb-2">
                    <Header.title>Add your todo</Header.title>
                </Header>

                <div className="flex flex-col gap-2">
                    <label className="flex flex-col" htmlFor="title">
                        <p className="font-[600] text-stone-500">Title</p>
                        <input
                            id="title"
                            type="text"
                            className="rounded-md border-[1px] border-stone-300 p-1"
                        />
                        <p className="mt-2 text-xs text-stone-600">
                            Add a useful title so that it's easier to search
                        </p>
                    </label>

                    <label className="flex flex-col" htmlFor="content">
                        <p className="font-[600] text-stone-500">Content</p>
                        <input
                            id="content"
                            type="text"
                            className="rounded-md border-[1px] border-stone-300 p-1"
                        />
                        <p className="mt-2 text-xs text-stone-600">
                            By adding content, it will help you in the future -
                            <span className="italic">optional</span>
                        </p>
                    </label>
                    <button
                        className="rounded-md bg-black p-2 font-[600] text-white transition-opacity hover:opacity-80"
                        type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    );
};

export default Form;
