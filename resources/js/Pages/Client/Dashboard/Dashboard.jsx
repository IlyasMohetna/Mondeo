import React, { useEffect, useState } from "react";
import UserDashboardLayout from "./Layouts/UserDashboardLayout";

const Dashboard = () => {
    return (
        <>
            <div className="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
                <p>Hallo</p>
            </div>
        </>
    );
};

Dashboard.layout = (page) => <UserDashboardLayout children={page} />;

export default Dashboard;