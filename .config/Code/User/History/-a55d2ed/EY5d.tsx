import Header from "@ui/header";

const Form = () => {
    return (
        <main>
            <form>
                <Header className="pb-2">
                    <Header.title>Add your todo</Header.title>
                </Header>

                <label className="flex flex-col" htmlFor="title">
                    Title
                    <input
                        id="title"
                        type="text"
                        className="rounded-md border-[1px] border-stone-300 p-1"
                    />
                    <p className="mt-2 text-xs text-stone-600">
                        Add a useful title so that it's easier to search
                    </p>
                </label>

                <label className="flex flex-col" htmlFor="title">
                    Title
                    <input
                        id="title"
                        type="text"
                        className="rounded-md border-[1px] border-stone-300 p-1"
                    />
                    <p className="mt-2 text-xs text-stone-600">
                        Add a useful title so that it's easier to search
                    </p>
                </label>
            </form>
        </main>
    );
};

export default Form;
