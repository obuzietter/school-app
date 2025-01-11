import Swal from 'sweetalert2'
function showCourseDetails(course) {
    const highlights = Array.isArray(course.highlights) 
        ? course.highlights 
        : JSON.parse(course.highlights || '[]');

    const schedule = Array.isArray(course.learning_schedule) 
        ? course.learning_schedule 
        : JSON.parse(course.learning_schedule || '[]');

    const highlightsList = highlights.length 
        ? `<ul>${highlights.map(item => `<li>${item}</li>`).join('')}</ul>` 
        : '<span>No highlights available</span>';

    const scheduleList = schedule.length 
        ? `<ul>${schedule.map(item => `<li>${item}</li>`).join('')}</ul>` 
        : '<span>No schedule available</span>';

    Swal.fire({
        title: course.title || 'Course Details',
        html: `
            <h5>Prerequisites</h5>
            <p>${course.prerequisites || 'No prerequisites available'}</p>
            <h5>Course Description</h5>
            <p>${course.course_description || 'No description available'}</p>
            <h5>Learning Schedule</h5>
            ${scheduleList}
            <h5>Highlights</h5>
            ${highlightsList}
        `,
        confirmButtonText: 'Close',
    });
}
