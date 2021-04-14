function confirmation(ev) {
	ev.preventDefault();
	var urlToRedirect = ev.currentTarget.getAttribute('href');
	swal({
		title: "Bạn có chắc muốn hủy?",
		text: "Lưu ý: Sau khi hủy bạn không thể hoàn tác",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Hủy thành công!", {
				icon: "success",
			});
			window.location =urlToRedirect;
		} else {
			swal("Hủy thất bại!");
		}
	});
}
function mess(ev) {
	ev.preventDefault();
	var urlToRedirect = ev.currentTarget.getAttribute('href');
	swal({
		title: "Xác nhận đơn hàng!",
		text: "Lưu ý: Xác nhận đơn hàng bạn sẽ không thể hoàn tác",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Xác nhận thành công!", {
				icon: "success",
			});
			window.location =urlToRedirect;
		} else {
			swal("Xác nhận thất bại!");
		}
	});
}
function reset(ev) {
	ev.preventDefault();
	var urlToRedirect = ev.currentTarget.getAttribute('href');
	swal({
		title: "Reset mật khẩu!",
		text: "Lưu ý: Mật khẩu của tài khoản sẽ được đưa về mặc định",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Reset thành công!", {
				icon: "success",
			});
			window.location =urlToRedirect;
		} else {
			swal("Reset thất bại!");
		}
	});
}
function remove(ev) {
	ev.preventDefault();
	var urlToRedirect = ev.currentTarget.getAttribute('href');
	swal({
		title: "Bạn có chắc muốn xóa?",
		text: "Lưu ý: Sau khi xóa bạn không thể hoàn tác",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Xóa thành công!", {
				icon: "success",
			});
			window.location =urlToRedirect;
		} else {
			swal("Xóa thất bại!");
		}
	});
}
function xacnhan(ev) {
	ev.preventDefault();
	var urlToRedirect = ev.currentTarget.getAttribute('href');
	swal({
		title: "Xác nhận đã nhận hàng",
		text: "Lưu ý: Kiểm tra kỹ chất lượng cũng như HSD của sản phẩm khi nhận hàng",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Xác nhận thành công!", {
				icon: "success",
			});
			window.location =urlToRedirect;
		} else {
			swal("Xác nhận thất bại!");
		}
	});
}