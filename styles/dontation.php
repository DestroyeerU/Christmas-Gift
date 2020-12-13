<?php
  header("Content-type: text/css");

  $fileName = $_FILES['photo']['name'];
  $hasFile = strcmp($fileName, "") === 0;
?>
main {
  padding: 51px 60px 90px;
}


main > a {
  margin-left: auto;
}

.link {
  font-size: 20px;
  font-weight: 400;
  color: var(--blue-darken);
}

.left-side {
  width: 100%;
  max-width: 450px;

}

.left-side .donations {
  margin-top: 45px;
}

.left-side .donation {
  display: flex;

  width: 100%;
  max-width: 370px;

  padding: 20px;
  border-radius: 10px;

  background-color: var(--whiten);
}

.left-side .donation:not(:first-child) {
  margin-top: 25px;
}

.left-side .donation .details {
  width: 140px;
  margin-left: 27px;

  font-size: 22px;
  font-weight: 500;

  color: var(--dark);
}

.left-side .donation img {
  width: 80px;
}

.right-side {
  flex-direction: column;
}

.right-side .profile {
  display: flex;
  flex-direction: column;
}

.right-side .profile img {
  width: 300px;

  object-fit: contain;

  border-radius: 10px;
}

.right-side .profile span {
  margin-top: 10px;

  font-size: 20px;
  font-weight: 400;
  color: var(--dark);
}

.right-side .link {
  margin-top: auto;
}
