// resources/js/Pages/Admin/Founders/Edit.jsx

import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import FounderForm from "@/components/Admin/Forms/Founder/FounderForm";

const Edit = ({ founder }) => {
    return (
        <AuthenticatedLayout>
            <div className="container max-w-screen-xl mx-auto">
                <div className="p-6">
                    <h2 className="mb-4 text-2xl font-bold">Edit Founder</h2>
                    <FounderForm founder={founder} isEdit={true} />
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default Edit;
