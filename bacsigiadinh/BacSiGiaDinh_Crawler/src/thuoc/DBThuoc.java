package thuoc;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class DBThuoc {
	private static DBThuoc _instance;

	public static DBThuoc getInstance() {
		if (_instance == null)
			_instance = new DBThuoc();
		return _instance;
	}

	private Connection conn;
	private Statement cmd;

	private DBThuoc() {
		try {
			Class.forName("org.sqlite.JDBC");
			conn = DriverManager.getConnection("jdbc:sqlite:data.db");
			cmd = conn.createStatement();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public List<NhomThuoc> getAllNhomThuoc() {
		try {
			List<NhomThuoc> list = new ArrayList<NhomThuoc>();
			ResultSet rs = cmd.executeQuery("select * from thuoc_category");
			while (rs.next()) {
				NhomThuoc n = new NhomThuoc();
				n.setId(rs.getString("id"));
				n.setUrl(rs.getString("url"));
				n.setSoTrang(rs.getInt("number_pages"));
				list.add(n);
			}

			return list;
		} catch (Exception e) {
			return null;
		}
	}

	/**
	 * Vì dùng để lấy thông tin thuốc nên chỉ cần lấy id và url của thuốc
	 * 
	 * @return
	 */
	public List<Thuoc> getAllThuoc() {
		List<Thuoc> list = new ArrayList<>();
		try {

			ResultSet rs = cmd.executeQuery("select * from thuoc where ham_luong is null");
			while (rs.next()) {
				Thuoc t = new Thuoc();
				t.setSoDangKy(rs.getString("id"));
				t.setUrl(rs.getString("url"));
				list.add(t);
			}
		} catch (Exception e) {

		}

		return list;

	}

	public void updateChiTietThuoc(Thuoc thuoc) {
		try {
			boolean kq = cmd
					.execute("update thuoc set dong_goi='" + thuoc.getDongGoi() + "',duoc_ly='" + thuoc.getNhomDuocLy()
							+ "',thanh_phan='" + thuoc.getThanhPhan() + "',ham_luong='" + thuoc.getHamLuong()
							+ "',chi_dinh='" + thuoc.getChiDinh() + "',chong_chi_dinh='" + thuoc.getChongChiDinh()
							+ "',tuong_tac='" + thuoc.getTuongTacThuoc() + "',tac_dung_phu='" + thuoc.getTacDungPhu()
							+ "',de_phong='" + thuoc.getDePhong() + "',lieu_luong='" + thuoc.getLieuLuong()
							+ "',bao_quan='" + thuoc.getBaoQuan() + "'  where id = '" + thuoc.getSoDangKy() + "'");
			if (kq)
				System.out.println(thuoc.getSoDangKy() + " is updated!");
			else
				System.out.println(thuoc.getSoDangKy() + " is update failed!");
		} catch (Exception e) {
			System.out.println(thuoc.getSoDangKy());
			e.printStackTrace();
		}
	}

	public void add(List<NhomThuoc> list) {
		for (NhomThuoc t : list)
			add(t);
	}

	public void add(NhomThuoc n) {
		try {
			cmd.execute("insert into thuoc_category values ('" + n.getId() + "','" + n.getTenNhomThuoc() + "','"
					+ n.getUrl() + "'," + n.getSoTrang() + ")");
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public void add(Thuoc thuoc) {
		try {
			cmd.execute("insert into thuoc (id, ten,dang_bao_che,nsx,url,img,id_cate) values ('" + thuoc.getSoDangKy()
					+ "','" + thuoc.getTenThuoc() + "','" + thuoc.getDangBaoChe() + "','" + thuoc.getNhaSanXuat()
					+ "','" + thuoc.getUrl() + "','" + thuoc.getImg() + "','" + thuoc.getId_cate() + "')");

			System.out.println(thuoc.getSoDangKy() + " is added!");
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

}
