const List = () => {
    return (
        <li
            key={todo.id}
            className="flex items-center justify-between text-[.9rem]"
        >
            <button className="flex items-center justify-around gap-3 font-[500] text-stone-600">
                <input type="checkbox" name="Buy jewelery" id="1" />
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
    );
};

export default List;
