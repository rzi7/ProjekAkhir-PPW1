function showCalendar(input) {
  const calendar = document.getElementById("calendar");
  const date = new Date(input.value);
  const year = date.getFullYear();
  const month = date.getMonth();

  calendar.innerHTML = "";

  const header = document.createElement("div");
  header.classList.add("header");

  const prevButton = document.createElement("button");
  prevButton.textContent = "<";
  prevButton.onclick = () => showCalendar(input, year, month - 1);
  header.appendChild(prevButton);

  const monthName = document.createElement("span");
  monthName.textContent = `${
    [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember",
    ][month]
  } ${year}`;
  header.appendChild(monthName);

  const nextButton = document.createElement("button");
  nextButton.textContent = ">";
  nextButton.onclick = () => showCalendar(input, year, month + 1);
  header.appendChild(nextButton);

  calendar.appendChild(header);

  const days = document.createElement("div");
  days.classList.add("days");

  const firstDay = new Date(year, month, 1);
  const firstDayIndex = firstDay.getDay();

  for (let i = 0 - firstDayIndex; i < 31; i++) {
    const day = document.createElement("div");
    day.classList.add("day");

    const date = new Date(year, month, i + 1);
    day.textContent = date.getDate();

    if (date.getMonth() !== month) {
      day.classList.add("other-month");
    }

    day.onclick = () => {
      input.value = date.toISOString().slice(0, 10);
      calendar.style.display = "none";
    };

    days.appendChild(day);
  }

  calendar.appendChild(days);
  calendar.style.display = "block";
  calendar.style.left = input.offsetLeft + "px";
  calendar.style.top = input.offsetTop + input.offsetHeight + "px";
}
