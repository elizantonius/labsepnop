angular.module("apps", []).controller("laboranController", laboranController);

function laboranController($scope, $http) {
  $http({
    method: "get",
    url: "http://localhost/laboran/read",
    headers: {
      "Content-Type": "application/json",
    },
  }).then((res) => {
    console.log(res.data);
  });
}
