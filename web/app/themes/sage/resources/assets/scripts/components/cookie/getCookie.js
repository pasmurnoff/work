export default function getCookie(name) {
    const value = `; ${document.cookie}`,
        parts = value.split(`; ${name}=`);
    if (parts.length === 2)
        return parts.pop().split(';').shift();
}
