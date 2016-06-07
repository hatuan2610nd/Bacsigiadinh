package mta.th10.bacsigiadinh.models;

import mta.th10.bacsigiadinh.enums.MyType;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;

public class Thuoc extends MyBaseItem implements IGroupItem {
	// =========== properties
	private String tenThuoc;
	private String dangBaoChe;
	private String nhaSanXuat;
	private String nhaDangKy;
	private String nhaPhanPhoi;
	private String soDangKy;

	private String dangDongGoi;
	private String nhomDuocLy;
	private String thanhPhan;
	private String hamLuong;

	private String chiDinh;
	private String chongChiDinh;
	private String tuongTacThuoc;
	private String tacDungPhu;
	private String dePhong;
	private String lieuLuong;
	private String baoQuan;

	private String url;
	private String img;
	private String id_cate;

	// ============= SETTERs & GETTERs
	public String getId() {
		return soDangKy;
	}

	public String getTenThuoc() {
		return tenThuoc;
	}

	public void setTenThuoc(String tenThuoc) {
		this.tenThuoc = tenThuoc;
	}

	public String getDangBaoChe() {
		return dangBaoChe == null ? "" : dangBaoChe;
	}

	public void setDangBaoChe(String dangBaoChe) {
		this.dangBaoChe = dangBaoChe;
	}

	public String getNhaSanXuat() {
		return nhaSanXuat == null ? "" : nhaSanXuat;
	}

	public void setNhaSanXuat(String nhaSanXuat) {
		this.nhaSanXuat = nhaSanXuat;
	}

	public String getNhaDangKy() {
		return nhaDangKy == null ? "" : nhaDangKy;
	}

	public void setNhaDangKy(String nhaDangKy) {
		this.nhaDangKy = nhaDangKy;
	}

	public String getNhaPhanPhoi() {
		return nhaPhanPhoi == null ? "" : nhaPhanPhoi;
	}

	public void setNhaPhanPhoi(String nhaPhanPhoi) {
		this.nhaPhanPhoi = nhaPhanPhoi;
	}

	public String getSoDangKy() {
		return soDangKy;
	}

	public void setSoDangKy(String soDangKy) {
		this.soDangKy = soDangKy;
	}

	public String getDongGoi() {
		return dangDongGoi == null ? "" : dangDongGoi;
	}

	public void setDongGoi(String dongGoi) {
		this.dangDongGoi = dongGoi;
	}

	public String getThanhPhan() {
		return thanhPhan == null ? "" : thanhPhan;
	}

	public void setThanhPhan(String thanhPhan) {
		this.thanhPhan = thanhPhan;
	}

	public String getChiDinh() {
		return chiDinh == null ? "" : chiDinh;
	}

	public void setChiDinh(String chiDinh) {
		this.chiDinh = chiDinh;
	}

	public String getChongChiDinh() {
		return chongChiDinh == null ? "" : chongChiDinh;
	}

	public void setChongChiDinh(String chongChiDinh) {
		this.chongChiDinh = chongChiDinh;
	}

	public String getTuongTacThuoc() {
		return tuongTacThuoc == null ? "" : tuongTacThuoc;
	}

	public void setTuongTacThuoc(String tuongTacThuoc) {
		this.tuongTacThuoc = tuongTacThuoc;
	}

	public String getTacDungPhu() {
		return tacDungPhu == null ? "" : tacDungPhu;
	}

	public void setTacDungPhu(String tacDungPhu) {
		this.tacDungPhu = tacDungPhu;
	}

	public String getDePhong() {
		return dePhong == null ? "" : dePhong;
	}

	public void setDePhong(String dePhong) {
		this.dePhong = dePhong;
	}

	public String getLieuLuong() {
		return lieuLuong == null ? "" : lieuLuong;
	}

	public void setLieuLuong(String lieuLuong) {
		this.lieuLuong = lieuLuong;
	}

	public String getBaoQuan() {
		return baoQuan == null ? "" : baoQuan;
	}

	public void setBaoQuan(String baoQuan) {
		this.baoQuan = baoQuan;
	}

	public String getHamLuong() {
		return hamLuong == null ? "" : hamLuong;
	}

	public void setHamLuong(String hamLuong) {
		this.hamLuong = hamLuong;
	}

	public String getUrl() {
		return url;
	}

	public void setUrl(String url) {
		this.url = url;
	}

	public String getImg() {
		return img;
	}

	public void setImg(String img) {
		this.img = img;
	}

	public String getId_cate() {
		return id_cate;
	}

	public void setId_cate(String id_cate) {
		this.id_cate = id_cate;
	}

	public String getNhomDuocLy() {
		return nhomDuocLy == null ? "" : nhomDuocLy;
	}

	public void setNhomDuocLy(String nhomDuocLy) {
		this.nhomDuocLy = nhomDuocLy;
	}

	@Override
	public String getTitle() {
		return this.tenThuoc;
	}

	@Override
	public MyType getType() {
		return MyType.Thuoc;
	}

}