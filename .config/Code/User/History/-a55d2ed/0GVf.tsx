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
                            required
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

                    <label htmlFor="status">
                        <p className="font-[600] text-stone-500">Status</p>
                        <select
                            className="w-full p-3 font-[700] text-stone-600"
                            name="status"
                            id="status"
                        >
                            <option value="in progress">In progress</option>
                            <option value="urgent">Urgent</option>
                            <option value="completed">Completed</option>
                        </select>
                        <p className="mt-2 text-xs text-stone-600">
                            Add status to know current progress
                        </p>
                    </label>
                    <button
                        className="mt-4 rounded-md bg-black p-2 font-[600] text-white transition-opacity hover:opacity-80"
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
