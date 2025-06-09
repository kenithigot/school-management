function fetchDesignations(departmentId) {
    if (!departmentId) return;

    fetch(`/get-designations/${departmentId}`)
        .then((response) => response.json())
        .then((data) => {
            const designationSelect = document.getElementById("designation");

            // Defensive check: make sure we found the select
            if (!designationSelect) {
                console.error("Designation select not found.");
                return;
            }

            // Clear existing options
            designationSelect.innerHTML =
                '<option value="">Select Designation</option>';

            // Populate new options
            data.forEach((item) => {
                const option = document.createElement("option");
                option.value = item.id;
                option.textContent = item.course_name;
                designationSelect.appendChild(option);
            });
        })
        .catch((error) => {
            console.error("Error fetching designations:", error);
        });
}

// Optional: ensure JS runs after page load
document.addEventListener("DOMContentLoaded", () => {
    const departmentSelect = document.getElementById("department");
    if (departmentSelect) {
        departmentSelect.addEventListener("change", function () {
            fetchDesignations(this.value);
        });
    }
});
