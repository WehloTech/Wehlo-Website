// resources/js/Components/Admin/Forms/Founder/FounderForm.jsx

import React from "react";
import { useForm, Link } from "@inertiajs/react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";

const FounderForm = ({
    founder = { name: "", position: "", image: null },
    isEdit = false,
}) => {
    const { data, setData, post, progress, errors } = useForm({
        name: founder.name ?? "",
        position: founder.position ?? "",
        image: null,
        ...(isEdit ? { _method: "PUT" } : {}),
    });

    const handleSubmit = (e) => {
        e.preventDefault();

        const routeName = isEdit ? "founders.update" : "founders.store";
        const routeParams = isEdit ? { founder: founder.id } : {};

        post(route(routeName, routeParams), {
            preserveState: true,
            preserveScroll: true,
            forceFormData: true,
        });
    };

    return (
        <form onSubmit={handleSubmit} encType="multipart/form-data">
            <div>
                <label>Name</label>
                <Input
                    value={data.name}
                    onChange={(e) => setData("name", e.target.value)}
                    className="mb-3"
                />
                {errors.name && (
                    <span className="text-sm text-red-500">{errors.name}</span>
                )}
            </div>

            <div>
                <label>Position</label>
                <Input
                    value={data.position}
                    onChange={(e) => setData("position", e.target.value)}
                    className="mb-3"
                />
                {errors.position && (
                    <span className="text-sm text-red-500">
                        {errors.position}
                    </span>
                )}
            </div>

            <div>
                <label>Image</label>
                <Input
                    type="file"
                    accept="image/*"
                    onChange={(e) => setData("image", e.target.files?.[0])}
                    className="mb-3"
                />

                {isEdit && founder.image && (
                    <img
                        src={founder.image}
                        alt="Founder"
                        className="w-32 mt-2 rounded"
                    />
                )}

                {progress && (
                    <progress value={progress.percentage} max="100">
                        {progress.percentage}%
                    </progress>
                )}

                {errors.image && (
                    <span className="text-sm text-red-500">{errors.image}</span>
                )}
            </div>

            <div className="flex gap-2 mt-4">
                {isEdit && (
                    <Link href="/admin/founders">
                        <Button type="button">Back</Button>
                    </Link>
                )}
                <Button type="submit">{isEdit ? "Update" : "Save"}</Button>
            </div>
        </form>
    );
};

export default FounderForm;
