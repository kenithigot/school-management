function fetchDesignations(departmentId) {
    if (!departmentId) return;

    fetch(`/get-designations/${departmentId}`) // GET request, no body needed
        .then((response) => response.json())
        .then((data) => {
            const designationSelect = document.getElementById("designation");
            designationSelect.innerHTML =
                '<option value="">Select Designation</option>'; // reset

            data.forEach((item) => {
                const option = document.createElement("option");
                option.value = item.id;
                option.textContent = item.course_name; // Adjust based on your DB column
                designationSelect.appendChild(option);
            });
        })
        .catch((error) => {
            console.error("Error fetching designations:", error);
        });
}
