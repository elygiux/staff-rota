/**
 * Count how many minutes in a float number representing hours
 *
 * @param time
 * @returns {number}
 */
function floatHoursToMinutes(time) {
    return parseInt(time) * 60 + parseInt(time % 1 * 60);
}