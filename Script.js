 const bookingURL = new URL("insert.php", window.location.href);
    bookingURL.searchParams.append('fname', fname);
    bookingURL.searchParams.append('name', name);
    bookingURL.searchParams.append('dob', dob);
    bookingURL.searchParams.append('email', email);
    bookingURL.searchParams.append('phone_num', phone_num);
    bookingURL.searchParams.append('baggage', baggage);
    bookingURL.searchParams.append('cargo', cargo);
