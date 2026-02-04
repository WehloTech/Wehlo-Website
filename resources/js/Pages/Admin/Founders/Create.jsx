// resources/js/Pages/Founders/Create.jsx
import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import FounderForm from "@/components/Admin/Forms/Founder/FounderForm"; // ✅ adjust if your folder name is different

const CreateFounder = () => {
    return (
        <AuthenticatedLayout>
            <div className="container max-w-screen-xl mx-auto">
                <div className="p-6">
                    <h2 className="mb-4 text-2xl font-bold">Create Founder</h2>
                    <FounderForm />
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default CreateFounder;
